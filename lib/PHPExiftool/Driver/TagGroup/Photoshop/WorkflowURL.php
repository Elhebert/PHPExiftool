<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WorkflowURL extends AbstractTagGroup
{
    protected string $id = 'Photoshop:WorkflowURL';

    protected string $name = 'WorkflowURL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Workflow URL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Main
             * line : 212328
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Photoshop::Main.Photoshop:WorkflowURL',
            'desc' => [
                'en' => 'Workflow URL',
            ],
        ],
    ];

    protected int $count = 0;
}
