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
class DefinitionObjectName extends AbstractTagGroup
{
    protected string $id = 'MXF:DefinitionObjectName';

    protected string $name = 'DefinitionObjectName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Definition Object Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115298
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DefinitionObjectName',
            'desc' => [
                'en' => 'Definition Object Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115301
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:DefinitionObjectName',
            'desc' => [
                'en' => 'Definition Object Name',
            ],
        ],
    ];

    protected int $count = 0;
}
