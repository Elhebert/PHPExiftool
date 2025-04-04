<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_iptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class WorkflowTagCvTermId extends AbstractTagGroup
{
    protected string $id = 'XMP-iptcExt:WorkflowTagCvTermId';

    protected string $name = 'WorkflowTagCvTermId';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Workflow Tag Cv Term Id',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::iptcExt
             * line : 289665
             * type : string
             * writable : true
             * count :
             * flags : flattened
             */
            'id' => 'XMP::iptcExt.XMP-iptcExt:WorkflowTagCvTermId',
            'desc' => [
                'en' => 'Workflow Tag Cv Term Id',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
