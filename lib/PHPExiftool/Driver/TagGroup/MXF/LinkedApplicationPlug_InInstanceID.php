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
class LinkedApplicationPlug_InInstanceID extends AbstractTagGroup
{
    protected string $id = 'MXF:LinkedApplicationPlug-InInstanceID';

    protected string $name = 'LinkedApplicationPlug-InInstanceID';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Linked Application Plug-In Instance ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118585
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:LinkedApplicationPlug-InInstanceID',
            'desc' => [
                'en' => 'Linked Application Plug-In Instance ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
