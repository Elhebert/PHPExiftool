<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Publisher extends AbstractTagGroup
{
    protected string $id = 'XML:Publisher';

    protected string $name = 'Publisher';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Publisher',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : OOXML::Main
             * line : 171828
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'OOXML::Main.XML:Publisher',
            'desc' => [
                'en' => 'Publisher',
            ],
        ],
    ];

    protected int $count = 0;
}
