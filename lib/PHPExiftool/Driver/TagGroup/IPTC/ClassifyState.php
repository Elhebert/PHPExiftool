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
class ClassifyState extends AbstractTagGroup
{
    protected string $id = 'IPTC:ClassifyState';

    protected string $name = 'ClassifyState';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Classify State',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 104194
             * type : string
             * writable : true
             * count : 64
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:ClassifyState',
            'desc' => [
                'en' => 'Classify State',
            ],
        ],
    ];

    protected int $count = 64;

    protected int $flags = 2048;
}
