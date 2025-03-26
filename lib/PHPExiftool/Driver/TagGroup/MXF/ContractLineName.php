<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ContractLineName extends AbstractTagGroup
{
    protected string $id = 'MXF:ContractLineName';

    protected string $name = 'ContractLineName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Contract Line Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116238
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ContractLineName',
            'desc' => [
                'en' => 'Contract Line Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116889
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ContractLineName',
            'desc' => [
                'en' => 'Contract Line Name',
            ],
        ],
    ];

    protected int $count = 0;
}
