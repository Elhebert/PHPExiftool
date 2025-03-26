<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubFile extends AbstractTagGroup
{
    protected string $id = 'IPTC:SubFile';

    protected string $name = 'SubFile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Sub File',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ObjectData
             * line : 104637
             * type : ?
             * writable : false
             * count :
             * flags : binary,list
             */
            'id' => 'IPTC::ObjectData.IPTC:SubFile',
            'desc' => [
                'en' => 'Sub File',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 66;
}
