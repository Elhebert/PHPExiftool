<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_ast;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Version extends AbstractTagGroup
{
    protected string $id = 'XMP-ast:Version';

    protected string $name = 'Version';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::ast
             * line : 141465
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Nikon::ast.XMP-ast:Version',
            'desc' => [
                'en' => 'Version',
            ],
        ],
    ];

    protected int $count = 0;
}
