<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DocType extends AbstractTagGroup
{
    protected string $id = 'Matroska:DocType';

    protected string $name = 'DocType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Doc Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Matroska::Main
             * line : 119387
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Matroska::Main.Matroska:DocType',
            'desc' => [
                'en' => 'Doc Type',
            ],
        ],
    ];

    protected int $count = 0;
}
