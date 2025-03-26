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
class MasterDocumentID extends AbstractTagGroup
{
    protected string $id = 'IPTC:MasterDocumentID';

    protected string $name = 'MasterDocumentID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::ApplicationRecord
             * line : 150732
             * type : string
             * writable : true
             * count : 256
             * flags :
             */
            'id' => 'IPTC::ApplicationRecord.IPTC:MasterDocumentID',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 256;

    protected int $flags = 2048;
}
