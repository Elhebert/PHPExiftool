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
class EnhancementOrModificationDescription extends AbstractTagGroup
{
    protected string $id = 'MXF:EnhancementOrModificationDescription';

    protected string $name = 'EnhancementOrModificationDescription';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Enhancement Or Modification Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114656
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:EnhancementOrModificationDescription',
            'desc' => [
                'en' => 'Enhancement Or Modification Description',
            ],
        ],
    ];

    protected int $count = 0;
}
