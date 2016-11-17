<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.phpdoctrine.org>.
 */

namespace Doctrine\Search\Mapping;

use Exception;

/**
 * A MappingException indicates that something is wrong with the mapping setup.
 */
class MappingException extends Exception
{
    public static function classIsNotAValidDocument($className)
    {
        return new self(sprintf(
            'Class "%s" is not a valid searchable document.',
            $className
        ));
    }

    public static function duplicateFieldMapping($mapping, $fieldName)
    {
        return new self(
            'Field "'.$fieldName.'" in "'.$mapping.'" was already declared, but it must be declared only once'
        );
    }

    public static function duplicateParameterMapping($mapping, $parameterName)
    {
        return new self(
            'Parameter "'.$parameterName.'" in "'.$mapping.'" was already declared, but it must be declared only once'
        );
    }

    /**
     * @param string $entityName
     * @return MappingException
     */
    public static function mappingFileNotFound($entityName)
    {
        return new self("No class or parent mapping file found for class '$entityName'.");
    }
}
